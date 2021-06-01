package com.udinus.ppl4611rpl_kelompok6;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import java.lang.String;
import com.denzcoskun.imageslider.ImageSlider;
import com.denzcoskun.imageslider.models.SlideModel;
import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        ImageSlider imageSlider=findViewById(R.id.image_slider);

        List<SlideModel> slideModels=new ArrayList<>();
        slideModels.add(new SlideModel("https://images.unsplash.com/photo-1518908336710-4e1cf821d3d1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib", "King of Console"));
        slideModels.add(new SlideModel("https://images.unsplash.com/photo-1511882150382-421056c89033?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80", "Game is made for fun"));
        slideModels.add(new SlideModel("https://images.unsplash.com/photo-1538895194639-f50554a2ca24?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1047&q=80", "Switch is the best portable console"));
        imageSlider.setImageList(slideModels,true);
    }

}

