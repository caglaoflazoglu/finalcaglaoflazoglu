Public function create(Request $request) {$data=$request->all();
Student::create($data);
}
