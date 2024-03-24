<x-admin-layout title="Dashboard">
    <x-slot name="subHeader">
        <x-admin.sub-header headerTitle="Dashboard">
            {{-- <x-admin.breadcrumbs>
                    <x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
            </x-admin.breadcrumbs> --}}
            <x-slot name="toolbar">
            </x-slot>
        </x-admin.sub-header>
</x-slot>

<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Monthly Paying member" description="Total Monthly Paying member available in this system" :count="$count['userCount']" href="{{ route('users.index') }}" />
                    <x-admin.dashboard-count-widget-item title="Total Monthly Paying Inactive member" description="Total blocked Monthly Paying member available in this system" :count="$count['blockedUserCount'] " href="{{ route('users.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Active Monthly Paying member" description="Total Active Monthly Paying member available in this system" :count="$count['activeUserCount'] " href="{{ route('users.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
        </div>
    </div>
</div>


<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Register Member" description="Total register member available in this system" :count="$count['registeruserCount']" href="{{ route('registered-member.index') }}" />
                    <x-admin.dashboard-count-widget-item title="Total Inactive Register Member" description="Total blocked register member available in this system" :count="$count['registerblockedUserCount'] " href="{{ route('registered-member.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Active Register Member" description="Total Active register member available in this system" :count="$count['registeractiveUserCount'] " href="{{ route('registered-member.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
        </div>
    </div>
</div>


<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Product" description="Total Product" :count="$count['productCount']" href="{{ route('product.index') }}" />
                    <x-admin.dashboard-count-widget-item title="Total Inactive Product" description="Total Inactive Product" :count="$count['blockedProductCount'] " href="{{ route('product.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Active  Product" description="Total Active Product" :count="$count['activeProductCount'] " href="{{ route('product.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
        </div>
    </div>
</div>

<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Recipe Category" description="Total Recipe Category" :count="$count['recipeCount']" href="{{ route('categoryrecipe.index') }}" />
                    <x-admin.dashboard-count-widget-item title="Total Inactive Recipe Category" description="Total Inactive Recipe Category" :count="$count['blockedRecipeCount'] " href="{{ route('categoryrecipe.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Active  Recipe Category" description="Total Active Recipe Category" :count="$count['activeRecipeCount'] " href="{{ route('categoryrecipe.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
        </div>
    </div>
</div>

</x-admin-layout>