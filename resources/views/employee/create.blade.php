<div class="fixed-overlay">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="background-color: #006149;">
            <div class="modal-content">
                <form id="createForm"
                      class="form-horizontal form-label-left"
                      method="POST"
                        action="{{route('employee.insert')}}">
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
                                <label class="control-label">Fullname</label>
                                <input type="text" class="form-control form-control-line" name="fullname" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Date birth</label>
                                <input type="date" class="form-control form-control-line" name="date_birth" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Salary</label>
                                <input type="text" class="form-control form-control-line" name="salary" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning" id="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--@include('computer.createscript')--}}
