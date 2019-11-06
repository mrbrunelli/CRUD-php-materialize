<?php
// sessão
session_start();

// veriicar se existe sessão
if (isset($_SESSION['mensagem'])) { ?>
    <script>
        // mensagem
        window.onload = function() {
            M.toast({
                html: '<?php echo $_SESSION['mensagem']; ?>'
            })
        }
    </script>

<?php
}
session_unset();
?>