package com.example.tiendaapp.adapters

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.tiendaapp.R
import com.example.tiendaapp.models.ItemCategory
import com.example.tiendaapp.models.ItemProduct

class ProductAdapter (val products:ArrayList<ItemProduct>) : RecyclerView.Adapter<ProductAdapter.ViewHolder>(){
    var position:Int=-1
    class ViewHolder(itemView: View): RecyclerView.ViewHolder(itemView) {
        init {

        }
        fun bindItems(cate: ItemProduct){
            //var label = itemView.findViewById<TextView>(R.id.item_name)
            //label.text = cate.nombre
        }
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ProductAdapter.ViewHolder {
        var vista= LayoutInflater.from(parent.context).inflate(R.layout.item_product,parent,false)
        return ViewHolder(vista)
    }

    override fun getItemCount(): Int {
        return products.size
    }

    override fun onBindViewHolder(holder: ViewHolder, position: Int) {
        this.position=position
        holder.bindItems(products[position])
    }
}