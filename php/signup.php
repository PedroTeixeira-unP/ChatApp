<?php
session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql)){
                echo "$email - Este email ja existe!";
            }else{
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    $img_explode = explode('.', $img_name);
                    $img_exp = end($img_explode);

                    $extensions = ['png', 'jpeg', 'jpg'];
                    if(in_array( $img_exp,  $extensions) === true){
                        
                        $time = time();
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, "imagens/".$new_img_name)){   
                            $status = 'Ativo';
                            $random_id = rand(time(), 10000000);
                            
                            $sql2 = mysqli_query($conn, "INSERT INTO users(unique_id, fname, lname, email, password, img, status) 
                                                  VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                            if($sql2){
                            
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' ");
                                if(mysqli_num_rows($sql3) > 0 ){
                                   $row = mysqli_fetch_assoc($sql3);
                                   $_SESSION['unique_id'] = $row['unique_id'];
                                   echo "sucess";
                                }
                            }else{
                                echo "Algo nao funcionou!";
                            }

                        }
                    }else {
                        echo "Selecione uma imagem - jpeg, jpg, png!";
                    }

                }else{
                    echo "Insira uma imagem.";
                }
            }
        }else{
            echo "$email - Este email nao e valido!";
        }
    }else{
        echo  "Todos os campos sao obrigatorios!";
    }
?>