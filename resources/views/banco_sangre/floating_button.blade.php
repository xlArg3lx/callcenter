<a onclick="Meta()" class="float" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <i class="fa fa-trophy my-float"></i>
</a>

<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        font-family: Verdana, Geneva, sans-serif;
        font-size: 18px;
        background-color: #CCC;
    }

    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #d0202d;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
    }

    .my-float {
        margin-top: 22px;
    }

</style>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function Meta() {
        Swal.fire('No te olvides, hoy debemos llamar a 50 pacientes, GRACIAS ❤')
    }
</script>
