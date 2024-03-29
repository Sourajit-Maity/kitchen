<x-admin-layout title="Product Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="Product List">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('product.index') }}" value="Product List" />
				</x-admin.breadcrumbs>

			    <x-slot name="toolbar" >
					<a href="{{route('product.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Add New Product
					</a>
				</x-slot>
			</x-admin.sub-header>
    </x-slot>
	<livewire:admin.product.product-list/>
</x-admin-layout>