<?php
class BDD{
    public  $bdd_obj;

    public  $user,
        $password;


    public function __construct(){
        $this->user = 'root';
        $this->password = '';


        try{
            $this->bdd_obj = new PDO('mysql:host=localhost;dbname=common-database',$this->user,$this->password);
        }catch(PDOException $e){
            print "Error: " . $e->getMessage() . "\n";
            die();
        }
    }

    public function verification_email($email){
        try{
            $sql = "SELECT email FROM user WHERE email=\"$email\"";
            $result  = $this->bdd_obj->prepare($sql);
            $result->execute();
            $email = $result->fetch();
            $result->closeCursor();

            if (empty($email)){
                return true;
            }else
                return false;
        }catch(PDOException $e){
            return "error";
        }
    }

    public function verification_username($username){
        try{
            $sql = "SELECT username FROM user WHERE username=\"$username\"";
            $result  = $this->bdd_obj->prepare($sql);
            $result->execute();
            $username = $result->fetch();
            $result->closeCursor();

            if (empty($username)){
                return true;
            }else
                return false;
        }catch(PDOException $e){
            return "error";
        }
    }

    public function connexion($email,$password){
        $crypt_password = hash_hmac("ripemd160",$password,"vive le projet tweet_academy");
        try{
            $sql = "SELECT id FROM user WHERE email=\"$email\" AND password=\"$crypt_password\"";
            $result = $this->bdd_obj->prepare($sql);
            $result->execute();
            $id_user = $result->fetch();
            $result->closeCursor();
            session_start();
            $_SESSION['idUser'] = $id_user[0];

            return $_SESSION['idUser'];
        }catch (PDOException $e){
            return "error";
        }
    }

    public function inscription($username, $email, $password, $birthday){
    $nickname = $username;

        try{
            $crypt_password = hash_hmac("ripemd160",$password,"vive le projet tweet_academy");
            $sql = "INSERT INTO user (username,nickname,email,password,birthdate,register_date,biography,active) VALUES (\"@$username\",\"$nickname\",\"$email\",\"$crypt_password\",\"$birthday\",now(),\"\",1)";
            $result = $this->bdd_obj->prepare($sql);
            $return = $result->execute();
            $result->closeCursor();

            return $return;
        }catch (PDOException $e){
            return "error";
        }
    }

    public function idConnected(){
        session_start();
        return $_SESSION['idUser'];
    }

    public function pushtweet($id,$tweet)
    {
        $date = date("y-m-d H-i-s");
        $bdd = $this->bdd_obj;
        $request = $bdd->query("INSERT INTO `tweet` (`id`, `content`, `publish_date`, `retweet`, `active`) 
        VALUES (NULL, '$tweet', '$date', '0', '1')");
        $request2 = $bdd->query("SELECT id FROM tweet WHERE content = '$tweet' AND publish_date = '$date'");
        $fetch = $request2->fetch();
        $request3 = $bdd->query("INSERT INTO `user_tweets` (`user_id`, `tweet_id`) VALUES ('$id','$fetch[0]')");
    }

    public function actu_update()
    {
        $bdd = $this->bdd_obj;
        $request = $bdd->query("SELECT * FROM tweet ORDER BY id DESC limit 20");
        $fetch = $request->fetchAll();
        return json_encode($fetch);
    }

    public function scroll_update($idToScroll)
    {
        $idToScrollEnd = $idToScroll+20;
        $bdd = $this->bdd_obj;
        $request = $bdd->query("SELECT * FROM tweet ORDER BY id DESC LIMIT 20 OFFSET ".$idToScroll."");
        $fetch = $request->fetchAll();
        return json_encode($fetch);
    }

    public function recherche_name($string)
    {
    $bdd = $this->bdd_obj;
    $request = $bdd->query("SELECT userame FROM user WHERE username LIKE  '$string%' limit 10");
    $fetch  = $request->fetchall();
    return json_encode($fetch);
    }

}
?>
