@foreach($employee as $c)
    <div class="fixed-overlay">
        <div class="modal fade" id="edit-arrival{{$c['employee_id']}}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="editForm{{$c['employee_id']}}"
                          class="form-horizontal form-label-left"
                          method="POST"
                          action="{{route('employee.update', ['employee' => $c['employee_id']])}}">
                        @csrf
                        <div class="form-group col-md-12">
                            <div class="modal-header row justified align-items-center">
                                <div><h3>Edit Info</h3></div>
                                <div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="font-family:'Georgia'; font-size:26px; font-weight:bold;"  >&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['employee_id']}}">Full name</label>
                                    <input type="text" value="{{ $c->fullname }}" class="form-control form-control-line" name="fullname" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['employee_id']}}">Date birth</label>
                                    <input type="text" value="{{ $c->date_birth }}" class="form-control form-control-line" name="date_birth" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['employee_id']}}">Salary</label>
                                    <input type="text" value="{{ $c->salary }}" class="form-control form-control-line" name="salary" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning" id="submit-edit-arrival{{$c['employee_id']}}">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
