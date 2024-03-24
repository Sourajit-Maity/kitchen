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
                aria-sort="ascending" aria-label="Agent: activate to sort column descending">Recipe Name <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('recipe_name')"></i>
            </th>
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 23%;"
                aria-label="Company Agent: activate to sort column ascending">Recipe category <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('recipe_category_id')"></i></th>

            <!-- <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 23%;"
                aria-label="Company Agent: activate to sort column ascending">Added By Name <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('added_by_id')"></i></th>         -->
            <th tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 20%;"
                aria-label="Company Agent: activate to sort column ascending">Description  <i
                    class="fa fa-fw fa-sort pull-right" style="cursor: pointer;" wire:click="sortBy('recipe_description')"></i></th>
            <th class="align-center" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" style="width: 15%;"
                aria-label="Status: activate to sort column ascending">Status</th>
            <th class="align-center" rowspan="1" colspan="1" style="width: 20%;" aria-label="Actions">Actions</th>
        </tr>

        <tr class="filter">
            <th>
                <x-admin.input type="search" wire:model.defer="searchName" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th>
            <th>
                <x-admin.input type="search" wire:model.defer="searchRecipeCategory" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th>
            <!-- <th>
                <x-admin.input type="search" wire:model.defer="searchAddedbyname" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th> -->
            <th>
                <x-admin.input type="search" wire:model.defer="searchDescription" placeholder="" autocomplete="off"
                    class="form-control-sm form-filter" />
            </th>
            <th>
                <select class="form-control form-control-sm form-filter kt-input" wire:model.defer="searchStatus"
                    title="Select" data-col-index="2">
                    <option value="-1">Select One</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
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
        @forelse($recipies as $recipe)
            <tr role="row" class="odd">
                <td class="sorting_1" tabindex="0">
                    <div class="kt-user-card-v2">
                        <div class="kt-user-card-v2__pic">
                            
                        </div>
                        <div class="kt-user-card-v2__details">
                            <span class="kt-user-card-v2__name">{{ $recipe->recipe_name }}</span>
                            <a href="#" class="kt-user-card-v2__email kt-link">Recipe since
                                {{ $recipe->created_at->diffForHumans(null, true) . ' ' }}</a>
                        </div>
                    </div>
                </td>
                <td class="sorting_1" tabindex="0">{{ $recipe->recipecategories->recipe_category }}</td>
                <!-- <td class="sorting_1" tabindex="0">{{ $recipe->first_name}}</td> -->
                <td class="sorting_1" tabindex="0">{{ Str::limit($recipe->recipe_description , 25) }}</td>
                <td class="align-center"><span
                        class="kt-badge  kt-badge--{{ $recipe->active == 1 ? 'success' : 'warning' }} kt-badge--inline kt-badge--pill cursor-pointer"
                        wire:click="changeStatusConfirm({{ $recipe->id }})">{{ $recipe->active == 1 ? 'Active' : 'Inactive' }}</span>
                </td>
                <x-admin.td-action>
                    <a class="dropdown-item" href="{{ route('recipe.edit', ['recipe' => $recipe->id]) }}"><i
                            class="la la-edit"></i> Edit</a>
                    <button href="#" class="dropdown-item" wire:click="deleteAttempt({{ $recipe->id }})"><i
                            class="fa fa-trash"></i> Delete</button>
                </x-admin.td-action>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="align-center">No records available</td>
            </tr>
        @endforelse

   
    </x-slot>
    <x-slot name="pagination">
        {{ $recipies->links() }}
    </x-slot>
    <x-slot name="showingEntries">
        Showing {{ $recipies->firstitem() }} to {{ $recipies->lastitem() }} of {{ $recipies->total() }} entries
    </x-slot>
</x-admin.table>
