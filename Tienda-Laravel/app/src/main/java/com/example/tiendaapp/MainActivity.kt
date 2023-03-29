package com.example.tiendaapp

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.view.animation.Animation
import android.view.animation.AnimationUtils
import android.widget.ImageView
import android.widget.LinearLayout

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        var imgLogo = findViewById<ImageView>(R.id.img_logo)
        var animation = AnimationUtils.loadAnimation(applicationContext,R.anim.zoom)
        imgLogo.startAnimation(animation)

        var btnFace = findViewById<LinearLayout>(R.id.btn_facebook)
        var animation2 = AnimationUtils.loadAnimation(applicationContext,R.anim.fade_in)
        btnFace.startAnimation(animation2)
        btnFace.setOnClickListener(View.OnClickListener {
            var intent= Intent(applicationContext,TabsActivity::class.java)
            startActivity(intent)
        })

        var btnGoogle = findViewById<LinearLayout>(R.id.btn_google)
        var animation3 = AnimationUtils.loadAnimation(applicationContext,R.anim.fade_in)
        btnGoogle.startAnimation(animation3)
    }
}