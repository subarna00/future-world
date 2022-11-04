<div class="fun-fact-wrapper">
    <div class="container">
        <div class="fun-fact-grid-4">
            <div class="grid-item  wow move-up">
                <div class="fun-fact--one text-center">
                    <h5 class="fun-fact__title">Successfully work <br> with </h5>
                    <div class="fun-fact__count counter">{{session()->get("satisfied")}}</div>
                    <span class="fun-fact__text">HAPPY CLIENTS</span>
                </div>
            </div>
            <div class="grid-item  wow move-up">
                <div class="fun-fact--one text-center">
                    <h5 class="fun-fact__title">Successfully <br> completed</h5>
                    <div class="fun-fact__count counter">{{session()->get("finished_works")}}</div>
                    <span class="fun-fact__text">Finished projects</span>
                </div>
            </div>
            <div class="grid-item  wow move-up">
                <div class="fun-fact--one text-center">
                    <h5 class="fun-fact__title">Our <br> Total</h5>
                    <div class="fun-fact__count counter">{{session()->get("projects")}}</div>
                    <span class="fun-fact__text">Projects</span>
                </div>
            </div>
            <div class="grid-item  wow move-up">
                <div class="fun-fact--one text-center">
                    <h5 class="fun-fact__title">Our <br> experience </h5>
                    <div class="fun-fact__count counter">{{session()->get("experience")}}</div>
                    <span class="fun-fact__text">Years</span>
                </div>
            </div>
        </div>
    </div>
</div>
