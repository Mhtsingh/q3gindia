<?php

class ideas {

    public $idea_id;
    public $name;
    public $email;
    public $phone;
    public $state;
    public $idea_name;
    public $category;
    public $summary_idea;
    public $similar_invention;
    public $drawing_invention;
    public $date_invention;
    public $made_it_date;
    public $told_about_invention;
    public $sold_invention;
    public $signature;
    public $terms_conditions;
    public $created_at;
    public $updated_at;
    public $is_active;
    public $status;

    public function ideas() {
        
    }

}

class users {

    public $user_id;
    public $username;
    public $email;
    public $mobile;
    public $password;
    public $user_type;
    public $address;
    public $created_at;
    public $updated_at;
    public $is_active;

    public function users() {
        
    }

}

class contact_us {

    public $contact_us_id;
    public $name;
    public $email;
    public $mobile;
    public $remark;
    public $created_at;
    public $updated_at;
    public $status;
    public $is_active;

    public function contact_us() {
        
    }

}

?>