package com.udinus.ppl4611rpl_kelompok6;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class Forgotpassword extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_forgotpassword);
    }
    public void btnforgot(View view){
        Intent i= new Intent(Forgotpassword.this,Login.class);
        startActivity(i);
    }
}