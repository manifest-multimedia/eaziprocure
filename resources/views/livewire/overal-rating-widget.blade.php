<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="d-flex justify-content-between align-items-center">
        <h5>Overall Rating</h5>
    </div>
    <div class="d-flex align-items-center m-t-20">
        <h1 class="m-b-0 m-r-10 font-weight-normal">4.5</h1>
        <div class="star-rating m-t-15">
            <input type="radio" id="star1-5" name="rating-1" value="5" checked disabled/><label for="star1-5" title="5 star"></label>
            <input type="radio" id="star1-4" name="rating-1" value="4" disabled/><label for="star1-4" title="4 star"></label>
            <input type="radio" id="star1-3" name="rating-1" value="3" disabled/><label for="star1-3" title="3 star"></label>
            <input type="radio" id="star1-2" name="rating-1" value="2" disabled/><label for="star1-2" title="2 star"></label>
            <input type="radio" id="star1-1" name="rating-1" value="1" disabled/><label for="star1-1" title="1 star"></label>
        </div>
    </div>
    <p><span class="text-success font-weight-bold">+1.5</span> point from last month</p>
    <div class="m-t-30" style="height: 150px">
        <canvas class="chart" id="rating-chart"></canvas>
    </div>
</div>
