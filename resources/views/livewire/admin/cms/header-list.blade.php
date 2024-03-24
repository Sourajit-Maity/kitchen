<x-admin.table>
    {{-- <x-slot name="search">
        <x-admin.input type="search" class="form-control form-control-sm" wire:model.debounce.500ms="search"
            aria-controls="kt_table_1" id="generalSearch" />
    </x-slot> --}}
    <x-slot name="perPage">
        <label>Show
            <x-admin.dropdown wire:model="perPage" class="custom-select custom-select-sm form-control form-control-sm">
                @foreach ($perPageList as $page)
                    <x-admin.dropdown-item :value="$page['value']" :text="$page['text']" />
                @endforeach
            </x-admin.dropdown> entries
        </label>
    </x-slot>

    <x-slot name="thead">
        <tr role="row">
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 22%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Logo <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('logo')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 22%;"
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Slogan <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('slogan')"></i>
            </th>
         
           
            <th class="align-center" rowspan="1" colspan="1" style="width: 20%;" aria-label="Actions">Actions</th>
        </tr>

        <tr class="filter">
            <th>
                <x-admin.input type="search" wire:model.defer="searchLogo" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th>
            <th>
                <x-admin.input type="search" wire:model.defer="searchSloagn" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th>
          
          
 
            <th>
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-brand kt-btn btn-sm kt-btn--icon" wire:click="search">
                            <span>
                                <i class="la la-search"></i>
                                <span>Search</span>
                            </span>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-secondary kt-btn btn-sm kt-btn--icon" wire:click="resetSearch">
                            <span>
                                <i class="la la-close"></i>
                                <span>Reset</span>
                            </span>
                        </button>
                    </div>
                </div>
            </th>
        </tr>
    </x-slot>

    <x-slot name="tbody">
        @forelse($headers as $header)
            <tr role="row" class="odd">
            <td class="sorting_1" tabindex="0"><img src="{{ Storage::url($header->logo) }}" width="100" class="img-circle img-left"></td>

                <td class="sorting_1" tabindex="0">{{ $header->slogan }}</td>
                
                <x-admin.td-action>
                    <a class="dropdown-item" href="{{ route('header.edit', ['header' => $header->id]) }}"><i
                            class="la la-edit"></i> Edit</a>
                    
                </x-admin.td-action>
            </tr>
        @empty 
            <tr>
                <td colspan="5" class="align-center">No records available</td>
            </tr>
        @endforelse
    </x-slot>
    <x-slot name="pagination">
        {{ $headers->links() }}
    </x-slot>
    <x-slot name="showingEntries">
        Showing {{ $headers->firstitem() }} to {{ $headers->lastitem() }} of {{ $headers->total() }} entries
    </x-slot>
</x-admin.table>
