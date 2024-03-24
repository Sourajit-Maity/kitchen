<x-admin-layout title="Content Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="Page List">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('pages.index') }}" value="Page List" />
				</x-admin.breadcrumbs>

			    <x-slot name="toolbar" >
					{{--<a href="{{route('industry.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Add New Page
					</a>--}}
				</x-slot>
			</x-admin.sub-header>
    </x-slot>
	<livewire:admin.pages.page-list/>
</x-admin-layout>