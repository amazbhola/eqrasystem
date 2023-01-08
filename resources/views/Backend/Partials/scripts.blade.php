<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
{{-- <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script> --}}
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
