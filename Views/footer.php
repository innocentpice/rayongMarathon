<?php
    if(isset($this->GoTo)){
        empty($this->GoTo['delay'])?'1000':$this->GoTo['delay'];
        echo "<script> setTimeout(()=>{ window.location = '".$this->GoTo['url']."' },".$this->GoTo['delay']."); </script>";
    }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?=URL_Public?>/js/semantic.js"></script>
<script src="<?=URL_Public?>/js/calendar.min.js"></script>
<script>window.URL_Path = "<?=URL_Path?>";</script>
<script src="<?=URL_Public?>/js/custom.js"></script>

<?php
    if(isset($this->JSInject)){
            foreach ($this->JSInject as $JS) {
                echo '<script src="';
                echo $JS;
                echo '"></script>';
            }
        }
?>

<?php
    if(isset($this->showMsg)){
        echo "<script>"
            ."Materialize.toast('".$this->showMsg."', 4000);"
            ."</script>";
    }
?>

</body>
</html>