<?php
   $categories = \App\Models\Category::get('title');
?>
<div class="wsus__reservation">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">{{trans('website.make an appointment')}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="wsus__reservation_form" action="{{ route('reservationStore') }}" method="post">
                        @csrf
                        <input class="reservation_input" required name="name" type="text" placeholder="{{trans('website.name')}}">
                        <input class="reservation_input" required name="phone" type="tel" placeholder="{{trans('website.phone')}}">
                        <input class="reservation_input" required name="address" type="text" placeholder="{{trans('website.address')}}">
                        <select class="reservation_input form-control" name="service" required>
                            <option value="">{{trans('website.select service')}}</option>
                        </select>
                        <input class="reservation_input" name="date" type="datetime-local">
{{--                        <select class="reservation_input form-control" name="time" id="select_js2">--}}
{{--                            <option value="">{{trans('website.select time')}}</option>--}}
{{--                            <option value="08.00 am to 09.00 am">08.00 am to 09.00 am</option>--}}
{{--                            <option value="10.00 am to 11.00 am">10.00 am to 11.00 am</option>--}}
{{--                            <option value="12.00 pm to 01.00 pm">12.00 pm to 01.00 pm</option>--}}
{{--                            <option value="02.00 pm to 03.00 pm">02.00 pm to 03.00 pm</option>--}}
{{--                            <option value="04.00 pm to 05.00 pm">04.00 pm to 05.00 pm</option>--}}
{{--                        </select>--}}
                        <textarea name="message" rows="5" placeholder="{{trans('website.message')}}"></textarea>
                        <button class="common_btn" type="submit">{{trans('website.submit now')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
