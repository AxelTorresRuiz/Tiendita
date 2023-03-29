package com.example.tiendaapp.ui.main

import android.content.Context
import androidx.fragment.app.Fragment
import androidx.fragment.app.FragmentManager
import androidx.fragment.app.FragmentPagerAdapter
import com.example.tiendaapp.R
import com.example.tiendaapp.views.CategoryFragment
import com.example.tiendaapp.views.FavsFragment
import com.example.tiendaapp.views.HomeFragment
import com.example.tiendaapp.views.ProfileFragment

private val TAB_TITLES = arrayOf(
    R.string.tab_text_1,
    R.string.tab_text_2,
    R.string.tab_text_3,
    R.string.tab_text_4
)
private val ARRAY_FRAGMENTS = arrayOf(
    HomeFragment(),
    CategoryFragment(),
    FavsFragment(),
    ProfileFragment()
)

/**
 * A [FragmentPagerAdapter] that returns a fragment corresponding to
 * one of the sections/tabs/pages.
 */
class SectionsPagerAdapter(private val context: Context, fm: FragmentManager) :
    FragmentPagerAdapter(fm) {

    override fun getItem(position: Int): Fragment {
        // getItem is called to instantiate the fragment for the given page.
        // Return a PlaceholderFragment (defined as a static inner class below).
        var fragment = HomeFragment()
        return ARRAY_FRAGMENTS.get(position);
        //return PlaceholderFragment.newInstance(position + 1)
    }

    override fun getPageTitle(position: Int): CharSequence? {
        return context.resources.getString(TAB_TITLES[position])
    }

    override fun getCount(): Int {
        // Show 4 total pages.
        return 4
    }
}