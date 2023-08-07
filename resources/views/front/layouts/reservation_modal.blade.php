<div class="wsus__reservation">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">make an appointment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="wsus__reservation_form" action="{{ route('reservationStore') }}" method="post">
                        @csrf
                        <input class="reservation_input" name="name" type="text" placeholder="Name">
                        <input class="reservation_input" name="phone" type="text" placeholder="Phone">
                        <input class="reservation_input" name="address" type="text" placeholder="address">
                        <select class="reservation_input form-control" name="service" id="select_js">
                            <option value="">select service</option>
                            <option value="Facial Therapy">Facial Therapy</option>
                            <option value="Candle Message">Candle Message</option>
                            <option value="Stone Spa">Stone Spa</option>
                            <option value="Body Treatments">Body Treatments</option>
                            <option value="Aroma Therapy">Aroma Therapy</option>
                        </select>
                        <input class="reservation_input" name="date" type="date">
                        <select class="reservation_input form-control" name="time" id="select_js2">
                            <option value="">select time</option>
                            <option value="08.00 am to 09.00 am">08.00 am to 09.00 am</option>
                            <option value="10.00 am to 11.00 am">10.00 am to 11.00 am</option>
                            <option value="12.00 pm to 01.00 pm">12.00 pm to 01.00 pm</option>
                            <option value="02.00 pm to 03.00 pm">02.00 pm to 03.00 pm</option>
                            <option value="04.00 pm to 05.00 pm">04.00 pm to 05.00 pm</option>
                        </select>
                        <textarea name="message" rows="5" placeholder="Message"></textarea>
                        <button class="common_btn" type="submit">submit now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
