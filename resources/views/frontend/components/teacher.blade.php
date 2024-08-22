 <section class="w3l-teams-32-main py-5">
     <div class="teams-32 py-md-4">
         <div class="container">
             <div class="title-main text-center mx-auto mb-4">
                 <h3 class="title-big">Guru Dan Staf Pengajar</h3>
             </div>
             <div class="row main-contteam-32 mt-sm-5 pt-lg-2">
                 @forelse ($teachers as $item)
                     <div class="col-lg-3 col-6 team-main-19">
                         <div class="column-19">
                             <a href="#team"><img class="img-fluid"
                                     src="{{ Storage::url($item->teacher_photo) }}" alt=" "></a>
                         </div>
                         <div class="right-team-9">
                             <h6><a href="#team" class="title-team-32">{{ $item->teacher_name }}</a></h6>
                             <p class="sm-text-32">{{ $item->teacher_major }}</p>
                         </div>
                     </div>
                 @empty
                     <div class="col-12">
                         <div class="card w-100">
                             <h4 class="card-body text-center fw-bold">Guru dan Staf Belum Ada</h4>
                         </div>
                     </div>
                 @endforelse
             </div>
         </div>
     </div>
 </section>
