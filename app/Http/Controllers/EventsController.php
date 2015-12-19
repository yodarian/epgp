<?php

namespace App\Http\Controllers;

use App\Event;
use App\Member;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'DESC')->get();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\CreateEventRequest|Request $request
     * @return Response
     */
    public function store(Requests\CreateEventRequest $request)
    {
        $input = $request->all();

        $input['ep'] = $this->_calculateEffortPoints($input);

        $event = Event::create($input);

        if (is_array($input['members'])) {
            foreach ($input['members'] as $memberId) {
                $event->members()->attach($memberId);
            }
        }

        return redirect('events');
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     * @return Response
     * @internal param int $id
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return Response
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\CreateEventRequest $request, Event $event)
    {
        $input = $request->all();

        $input['ep'] = $this->_calculateEffortPoints($input);

        $currentMemberIds = $event->getMemberIdsAsArray();

        foreach ($currentMemberIds as $currentMemberId) {
            if (!in_array($currentMemberId, $input['members'])) {
                $event->members()->detach($currentMemberId);
            }
        }

        if (is_array($input['members'])) {
            foreach ($input['members'] as $memberId) {
                if (!in_array($memberId, $currentMemberIds)) {
                    $event->members()->attach($memberId);
                }
            }
        }

        $event->update($input);

        return redirect('events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param $input
     * @return mixed
     */
    private function _calculateEffortPoints($input)
    {
        $ep = $input['number_bosses'] * 100 + $input['number_firstkills'] * 300 + $input['time_spend'] * 100 + $input['bonus_ep'];

        return $ep;
    }
}
