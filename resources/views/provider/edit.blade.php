@foreach($provider as $c)
    <div class="fixed-overlay">
        <div class="modal fade" id="edit-arrival{{$c['provider_id']}}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="editForm{{$c['provider_id']}}"
                          class="form-horizontal form-label-left"
                          method="POST"
                          action="{{route('provider.update', ['provider' => $c['provider_id']])}}">
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
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['provider_id']}}">Full name</label>
                                    <input type="text" value="{{ $c->full_name_of_provider }}" class="form-control form-control-line" name="full_name_of_provider" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['provider_id']}}">Company name</label>
                                    <input type="text" value="{{ $c->company_name }}" class="form-control form-control-line" name="company_name" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$c['provider_id']}}">Telephone number</label>
                                    <input type="text" value="{{ $c->telephone_number }}" class="form-control form-control-line" name="telephone_number" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning" id="submit-edit-arrival{{$c['provider_id']}}">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
