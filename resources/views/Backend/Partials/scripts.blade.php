<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js"></script> --}}
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

<script>

    document.getElementById('hamburg').addEventListener('click',function () {
        document.getElementById('sidebar').classList.add('active')
    })
    document.getElementById('closer').addEventListener('click',function () {
        document.getElementById('sidebar').classList.remove('active')
    })
    document.getElementById('dropdown').addEventListener('click',function () {
        document.getElementById('dropdown_content').classList.toggle('hidden')
    })
</script>
