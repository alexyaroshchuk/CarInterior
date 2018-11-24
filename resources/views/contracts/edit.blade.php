@foreach($contracts as $c)
    <div class="fixed-overlay">
        <div class="modal fade" id="edit-arrival{{$c['contracts_id']}}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="editForm{{$c['contracts_id']}}"
                          class="form-horizontal form-label-left"
                          method="POST"
                          action="{{route('contracts.update', ['contracts' => $c['contracts_id']])}}">
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
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['contracts_id']}}">Car</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Product" tabindex="1" name="car_id">
                                        @foreach($car as $p)
                                            @if($p == $c->car)
                                                <option value="{{$p->car_id}}" selected>{{ $p->mark}}/{{ $p->model}}</option>
                                            @else
                                                <option value="{{$p->car_id}}">{{ $p->mark }}/{{ $p->model}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['contracts_id']}}">Client</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Product" tabindex="1" name="client_id">
                                        @foreach($client as $p)
                                            @if($p == $c->client)
                                                <option value="{{$p->client_id}}" selected>{{ $p->fullname }}</option>
                                            @else
                                                <option value="{{$p->client_id}}">{{ $p->fullname }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['contracts_id']}}">Employee</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Product" tabindex="1" name="employee_id">
                                        @foreach($employee as $p)
                                            @if($p == $c->employee)
                                                <option value="{{$p->employee_id}}" selected>{{ $p->fullname }}</option>
                                            @else
                                                <option value="{{$p->employee_id}}">{{ $p->fullname }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['contracts_id']}}">Start of contract</label>
                                    <input type="date" value="{{ $c->start_of_contract }}" class="form-control form-control-line" name="start_of_contract" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['contracts_id']}}">End of contract</label>
                                    <input type="date" value="{{ $c->end_of_contract }}" class="form-control form-control-line" name="end_of_contract" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['contracts_id']}}">Price</label>
                                    <input type="text" value="{{ $c->price }}" class="form-control form-control-line" name="price" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning" id="submit-edit-arrival{{$c['contracts_id']}}">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
