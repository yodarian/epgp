<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    protected $priority;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
//        $members = Member::orderBy('id', 'DESC')->get();
//        $members = $this->getMembersSortedByPriority();
        foreach ($members as &$member) {
            $member->setPriorityAttribute($member->getPriorityAttribute());
        }
        $members = $members->sortByDesc('priority');
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateMemberRequest $request)
    {
        Member::create($request->all());

        return redirect('members');
    }

    /**
     * Display the specified resource.
     *
     * @param Member $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Member $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Requests\UpdateMemberRequest|Request $request
     * @param Member $member
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateMemberRequest $request, Member $member)
    {
        $input = $request->all();

        if (isset($input['loot']) && $input['loot'] != '0') {
            $member->loot()->attach($input['loot'], ['awarded_at' => $input['awarded_at']]);
            unset($input['loot']);
        }

        $member->update($input);

        return redirect('members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
