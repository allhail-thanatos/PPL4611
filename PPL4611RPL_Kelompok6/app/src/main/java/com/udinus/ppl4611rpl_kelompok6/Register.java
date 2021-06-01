package com.udinus.ppl4611rpl_kelompok6;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class Register extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);
    }
    public void btnregister(View view) {
        Intent i = new Intent(Register.this, Login.class);
        startActivity(i);
    }
}