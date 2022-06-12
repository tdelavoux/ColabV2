<div class="kanban-col mh-1">
    <div class="kanban-col-header pb-05" style="border-color:{{$color}}">
        <label>{{$name}}</label>
        <span>
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-ellipsis"></i>
        </span> 
    </div>

    <div class="kanban-col-body p-1">
        <div class="kanban-card">
            <span class="kanban-card-title a-text-light">Titre de la tache</span>
            <p class="kanban-card-content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem enim, pellentesque at scelerisque id, pellentesque vel ante. Proin pellentesque metus metus, viverra fringilla tellus finibus ut.
            </p>
            <div class="kanban-card-row">
                <div class="kanban-users-strack">
                    <div class="a-round-img-xs" style="background-image:url('{{ asset('img/userDefault2.jpg') }}');"></div>
                    <div class="a-round-img-xs" style="background-image:url('{{ asset('img/userDefault9.jpg') }}');"></div>
                    <div class="a-round-img-xs" style="background-image:url('{{ asset('img/userDefault.jpg') }}');"></div>
                </div>
                <span class="kanban-tag tag-r">Developpment</span>
            </div>
            <div class="kanban-card-row mt-1 sb">
                <div class="kanban-left">
                    <span class="kanban-icon"><i class="fa-regular fa-comment-dots"></i>8</span>
                </div>
                <div class="kanban-right">
                    <span class="kanban-icon"><i class="fa-solid fa-calendar-days"></i>Tomorrow</span>
                </div>
            </div>
        </div>

        <div class="kanban-card">
            <span class="kanban-card-title a-text-light">Titre de la tache</span>
            <p class="kanban-card-content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem enim, pellentesque at scelerisque id, pellentesque vel ante. Proin pellentesque metus metus, viverra fringilla tellus finibus ut.
            </p>
            <div class="kanban-card-row">
                <div class="a-round-img-xs" style="background-image:url('{{ asset('img/userDefault2.jpg') }}');"></div>
                <span class="kanban-tag tag-y">Research</span>
                <span class="kanban-tag">Planing</span>
            </div>
            <div class="kanban-card-row mt-1 sb">
                <div class="kanban-left">
                    <span class="kanban-icon"><i class="fa-regular fa-comment-dots"></i>3</span>
                    <span class="kanban-icon"><i class="fa-solid fa-paperclip"></i>1</span>
                </div>
                <div class="kanban-right">
                    <span class="kanban-icon"><i class="fa-solid fa-calendar-days"></i>June 23</span>
                </div>
            </div>
        </div>
    </div>
</div>