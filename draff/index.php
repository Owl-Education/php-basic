<?php

public function search(Request $request)
{
    {
        try {
            $user = User::findOrFail($request->input('user_id'));
        } catch (ModelNotFoundException $exception) {
            return back()->withErrors($exception->getMessage())->withInput();
        }

        return view('users.search', compact('user'));
    }
}
