<!-- Basic Bootstrap Table -->
<div class="card-body">


    <div class="input-group input-group-merge mb-4">
        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
        <input type="text" class="form-control " placeholder="Search..." aria-label="Search..."
            aria-describedby="basic-addon-search31" wire:model.live='search' />
    </div>



    @if ($data->count() > 0)
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th width='50%'>Name</th>
                        <th width='20%'>Count</th>
                        <th width='20%'>Icon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $item)
                        <tr>
                            <td>
                                <strong>{{ $item->name }}</strong>
                            </td>
                            <td>{{ $item->count }} </td>
                            <td>

                                <i class="{{ $item->icon }}"></i>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('countersUpdate',{id:{{$item->id}}})">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('countersDelete',{id:{{$item->id}}})">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $data->links() }}
    @else
        <span class="text-danger text-center">No Data Found!</span>
    @endif
</div>
<!--/ Basic Bootstrap Table -->

