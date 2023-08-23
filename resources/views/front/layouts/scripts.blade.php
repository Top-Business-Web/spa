 <!--jquery library js-->
 <script src="{{ asset('assets/front/js/jquery-3.6.0.min.js') }}"></script>
 <!--bootstrap js-->
 <script src="{{ asset('assets/front/js/bootstrap.bundle.min.js') }}"></script>
 <!--font-awesome js-->
 <script src="{{ asset('assets/front/js/Font-Awesome.js') }}"></script>
 <!--venobox js-->
 <script src="{{ asset('assets/front/js/venobox.min.js') }}"></script>
 <!--slick slider js-->
 <script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
 <!--cursor pointer js-->
 <script src="{{ asset('assets/front/js/pointer.js') }}"></script>
 <!--isotop js-->
 <script src="{{ asset('assets/front/js/isotope.pkgd.min.js') }}"></script>
 <!--counter js-->
 <script src="{{ asset('assets/front/js/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('assets/front/js/jquery.countup.min.js') }}"></script>
 <!--barfiller js-->
 <script src="{{ asset('assets/front/js/animated_barfiller.js') }}"></script>
 <!--nice select js-->
 <script src="{{ asset('assets/front/js/jquery.nice-select.min.js') }}"></script>
 <!--stucky sidebar js-->
 <script src="{{ asset('assets/front/js/sticky_sidebar.js')}}"></script>
 <!--simply countdown js-->
 <script src="{{ asset('assets/front/js/simplyCountdown.js') }}"></script>
 <!--wow js-->
 <script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
 <!-- owl carousel -->
 <script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>

 <!--main/custom js-->
 <script src="{{ asset('assets/front/js/main.js') }}"></script>

 <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).on('click','#reservationBtn',function(){
        let url = "{{ route('getService') }}";
        $.ajax({
            url : url,
            method : 'GET',
            success : function(data){
                $('select[name="service"]').empty();
                $.each(data, function(index,item) {
                    $('select[name="service"]').append($('<option>', {
                        value: item.id,
                        text: item.name
                    }));
                });
                console.log(data);
            },
        })
    })
</script>
