<div>
    @include('livewire.create')
    @include('livewire.update')
   <section>
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   @if(session()->has('message'))
                   <div class="alert alert-success">{{session('message')}}</div>
                   @endif
               <div class="card">
                   <div class="card-header">
                       <h3>All Students
                       <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                        Add
                        </button>
                       </h3>
                   </div>
                   <div class="card-body table-responsive">
                       <table class="table table-stripted table-hover">
                            <thead>
                                <tr>
                                   
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                
                                    <td>{{$student->firstname}}</td>
                                    <td>{{$student->lastname}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#updateStudentModal" wire:click.prevent='edit({{$student->id}})'>
                                          Edit
                                         </button>
                                         <button type="button" class="btn btn-sm btn-danger" wire:click.prevent='delete({{$student->id}})'>
                                          Del
                                         </button>
                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$students->links()}}
                   </div>
               </div>
               </div>
           </div>
       </div>
   </section>
</div>
