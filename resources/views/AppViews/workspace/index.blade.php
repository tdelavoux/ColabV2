<div class="p-2">
    <div class="panel-header">
        <span role="button" class="tab-title active">Active Workspaces <span class="tab-arg">9</span></span>
        <span role="button" class="tab-title">Archived <span class="tab-arg">12</span></span>

        <input class="a-borderfull search-workspace-input" placeholder="Search Workspace">
        <button class="a-btn a-full-primary ml-1"><i class="fa-regular fa-square-plus"></i>New  Worspace</button>
        <button class="a-btn a-light ml-1"><i class="fa-solid fa-filter"></i>Filters</button>
    </div>

    <div class="panel-content flex mt-2">

        <div class="workspace-card mh-05">
            <div class="workspace-card-header w100 al mb-05">
                Colab Web App
            </div>
            <div class="workspace-card-content w100">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ut veniam accusamus inventore dolore aut obcaecati harum dolorum voluptatum nihil ducimus blanditiis.</p>
            </div>
            <div class="owner-bloc">
                <div role="button" class="a-round-img-sm user-img" style="background-image:url('{{ asset('img/userDefault.jpg') }}');"></div>
                <div class="owner-col">
                    <span class="owner-name">Thibault Delavoux</span>
                    <span>Owner</span>
                </div>
            </div>
            <div class="workspace-card-footer w100 mt-1 ar">
                <div>
                    <span><i class="fa-solid fa-chalkboard"></i>6</span>
                    <span><i class="fa-solid fa-users"></i>4</span>
                    <span><i class="fa-solid fa-user-ninja"></i>14</span>
                </div>
            </div>
        </div>

        <div class="workspace-card mh-05">
            <div class="workspace-card-header w100 al mb-05">
                Colab Web App
            </div>
            <div class="workspace-card-content w100">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, veritatis. A exercitationem libero, aperiam tenetur quis laborum totam possimus optio deleniti id aliquam nihil dignissimos doloribus voluptatum cupiditate beatae debitis.</p>
            </div>
            <div class="owner-bloc">
                <div role="button" class="a-round-img-sm user-img" style="background-image:url('{{ asset('img/userDefault4.jpg') }}');"></div>
                <div class="owner-col">
                    <span class="owner-name">Sarah Vigote</span>
                    <span>Owner</span>
                </div>
            </div>
            <div class="workspace-card-footer w100 mt-1 ar">
                {{-- <div>
                    <progress class="progress" max="100" value="70"> 70% </progress> <span>25/35</span>
                </div> --}}
                <div>
                    <span><i class="fa-solid fa-chalkboard"></i>6</span>
                    <span><i class="fa-solid fa-users"></i>4</span>
                    <span><i class="fa-solid fa-user-ninja"></i>14</span>
                </div>
            </div>
        </div>

    </div>
</div>