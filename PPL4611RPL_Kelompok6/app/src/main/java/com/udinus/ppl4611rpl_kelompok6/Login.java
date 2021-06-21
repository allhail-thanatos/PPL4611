package com.udinus.ppl4611rpl_kelompok6;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;

public class Login extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
    }
    public void btnregister(View view) {
        Intent i = new Intent(Login.this, Register.class);
        startActivity(i);
    }
    public void btnforgot(View view){
        Intent i = new Intent(Login.this,Forgotpassword.class);
        startActivity(i);
    }
    public void btnlogin(View view){
        Intent i= new Intent(Login.this,welcomepage.class);
        startActivity(i);
    }
}