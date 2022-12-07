@include('staff_assets.header')
<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

<div class="py-12">
     <div class="max-w-full mx-auto sm:px-1 lg:px-1">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @include('staff_assets.switchermenu')
            <div class="uk-text-center" style="margin-top: 150;" uk-grid>
                {{-- <div class="uk-width-1-3">
                    <div class="uk-card uk-card-default uk-card-body">   
                               
                        <div class="uk-form-controls">                
                                <button class="uk-button uk-button-default uk-margin-small-right"
                                style="background-color: rgb(67 56 202 / var(--tw-bg-opacity)); color:white"  type="button"
                                 uk-toggle="target: #modalAdd">Thêm </button>
                                 
                            <div id="modalAdd" class="uk-modal"  uk-modal>
                                <div class="uk-modal-dialog uk-modal-body " >
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                      @include('admin_assets.MemberManagement_Add')
                                </div>
                            </div> 
                        </div>
                    </div>
                </div> --}}
                    {{-- <div class="uk-width-1-3">
                        <div class="uk-card uk-card-default uk-card-body">   
                               
                            <div class="uk-form-controls">                
                               <select class="uk-select" id="CategoryProductSelect">
                                <option value="">Tất cả</option>
                                @foreach ($getCategory as $_getCategory )
                                <option value="{{$_getCategory->CategoryName}}">{{$_getCategory->CategoryName}}</option>
                                @endforeach
                               </select>
                                
                            </div>
                        </div>
                    </div> --}}
                    <div class="uk-width-1-3">
                        <div class="uk-card uk-card-default uk-card-body">   
                            @include('alert')
                        </div>
                    </div>
                {{-- thanhtimkiem --}}
              
                </div>
                {{-- <table class="uk-table uk-table-hover uk-table-divider">
                    <thead>
                        <tr>
                           
                            <th>Mã số nhân sự</th>
                            <th>Tên nhân sự</th>
                            <th>Email</th>
                            <th>Thông tin chi tiết</th>
                        </tr>
                    </thead>
                    <tbody class="tbox">
                        @foreach ($getUser as $_getUser )
                         
                            <tr>
                                <td>{{$_getUser->id}}</td>
                                <td>{{$_getUser->name}}</td>
                                <td>{{$_getUser->email}}</td>
                                <td><button class="uk-button uk-button-default uk-margin-small-right"
                                     style="background-color: #48c78e; color:white"  type="button"
                                      uk-toggle="target: #modal_UserView{{$_getUser->id}}">Thông tin chi tiết </button>
                                      <div id="modal_UserView{{$_getUser->id}}" class="uk-modal-full" uk-modal>
                                        <div class="uk-modal-dialog" style="height: 100%">
                                            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                        
                                          @include('admin_assets.MemberManagement_View')
                                           
                                        </div>
                                    </div> 
                                </td>
   
                                <td><button class="uk-button uk-button-default uk-margin-small-right"
                                    style="background-color: #27b5b5; color:white"  type="button"
                                     uk-toggle="target: #modal_UserUpdate{{$_getUser->id}}">Chỉnh sửa thông tin </button>
                                     <div id="modal_UserUpdate{{$_getUser->id}}" class="uk-modal"  uk-modal>
                                       <div class="uk-modal-dialog uk-modal-body " >
                                           <button class="uk-modal-close-default" type="button" uk-close></button>
                                           
                                           @include('admin_assets.MemberManagement_Update')
                                       </div>
                                   </div> 
                               </td>
                               
                               @if ( $_getUser->role==0 )
                                <td><button class="uk-button uk-button-default uk-margin-small-right"
                                    style="background-color: #c42452; color:white"  type="button"
                                     uk-toggle="target: #modal_UserDelete{{$_getUser->id}}">Thu hồi tài khoản </button>
                                     <div id="modal_UserDelete{{$_getUser->id}}" class="uk-modal"  uk-modal>
                                       <div class="uk-modal-dialog uk-modal-body " >
                                           <button class="uk-modal-close-default" type="button" uk-close></button>
                                           
                                           @include('admin_assets.MemberManagement_Delete')
                                       </div>
                                   </div> 
                               </td>
                               @elseif ($_getUser->role==-1)
                                <td><button class="uk-button uk-button-default uk-margin-small-right"
                                    style="background-color: #92cc14; color:white"  type="button"
                                     uk-toggle="target: #modal_UserAllow{{$_getUser->id}}">Cấp lại tài khoản </button>
                                     <div id="modal_UserAllow{{$_getUser->id}}" class="uk-modal"  uk-modal>
                                       <div class="uk-modal-dialog uk-modal-body " >
                                           <button class="uk-modal-close-default" type="button" uk-close></button>
                                           
                                           @include('admin_assets.MemberManagement_Allow')
                                       </div>
                                   </div> 
                               </td>
                               @endif
                              
                            </tr>
                        
                       
                        @endforeach
                    </tbody>
                </table>     --}}
                @include('admin_assets.MemberManagement_Table')
 </div>
        </div>
    </div>
</x-app-layout>
{{-- <script>
    CategoryProductSelect.addEventListener("change", function() {
        $value2 = $(CategoryProductSelect).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('PMCateSearch') }}',
            data: {
                'CategoryProduct_search': $value2
            },
            success:function(data){
                $('tbody.tbox').html(data);
            }
        });
    })
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script> --}}