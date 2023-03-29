package com.example.tiendaapp

import android.os.Bundle
import com.google.android.material.floatingactionbutton.FloatingActionButton
import com.google.android.material.snackbar.Snackbar
import com.google.android.material.tabs.TabLayout
import androidx.viewpager.widget.ViewPager
import androidx.appcompat.app.AppCompatActivity
import com.example.tiendaapp.ui.main.SectionsPagerAdapter
import com.example.tiendaapp.databinding.ActivityTabsBinding

class TabsActivity : AppCompatActivity() {

    private lateinit var binding: ActivityTabsBinding
    private val tabIcons = intArrayOf(
        R.drawable.ic_home,
        R.drawable.ic_cate,
        R.drawable.ic_fav,
        R.drawable.ic_user
    )
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        binding = ActivityTabsBinding.inflate(layoutInflater)
        setContentView(binding.root)

        val sectionsPagerAdapter = SectionsPagerAdapter(this, supportFragmentManager)
        val viewPager: ViewPager = binding.viewPager
        viewPager.adapter = sectionsPagerAdapter
        val tabs: TabLayout = binding.tabs
        tabs.setupWithViewPager(viewPager)
        tabs.getTabAt(0)!!.setIcon(tabIcons.get(0))
        tabs.getTabAt(1)!!.setIcon(tabIcons.get(1))
        tabs.getTabAt(2)!!.setIcon(tabIcons.get(2))
        tabs.getTabAt(3)!!.setIcon(tabIcons.get(3))
        val fab: FloatingActionButton = binding.fab

        fab.setOnClickListener { view ->
            Snackbar.make(view, "Replace with your own action", Snackbar.LENGTH_LONG)
                .setAction("Action", null).show()
        }
    }
}