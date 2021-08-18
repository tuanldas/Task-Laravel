<?php

namespace App\Http\Controllers;

use App\Model\Task;
use DB;
use Illuminate\Http\Request;

class ManagementController extends Controller
{

    public function lists()
    {
        $lists = Task::all();

        return view('list', ['lists' => $lists]);
    }

    public function delete($id)
    {
        $delete = Task::find($id);
        $delete->delete();

        return redirect()->route('list');
    }

    public function edit(Request $request)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            return $this->thameInsert();
        } else {
            $name = $request->input('name');
            $phone = $request->input('phone');
            $email = $request->input('email');

            $insert = DB::table('tasks')->insert([
                'name' => "$name",
                'phone' => $phone,
                'email' => "$email"
            ]);

            return redirect()->route('list');
        }
    }


    protected function thameInsert()
    {
        return view('insert');
    }

    protected function thameUpdate($id)
    {
        $user = Task::find($id);
        return view('update', ['users' => $user]);
    }

    public function update(Request $request, $id1)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            return $this->thameUpdate($id1);
        } else {
            $id1;
            $name = $request->input('name');
            $phone = $request->input('phone');
            $email = $request->input('email');
            $update = DB::table('tasks')
                ->where('id', $id1)
                ->update([
                    'name' => "$name",
                    'phone' => $phone,
                    'email' => "$email"
                ]);

            return redirect()->route('list');

        }
    }
}
