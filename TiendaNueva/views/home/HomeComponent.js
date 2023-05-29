import { View,Text, Button, ScrollView } from "react-native"
import HeaderComponent from "../layouts/HeaderComponent"
import ProductItemComponent from "../../components/ProductItemComponent"
import { useState,useEffect } from "react"
export default function HomeComponent(){
    let data=[
        {id:1,name:'Producto 1',price:200},
        {id:2,name:'Producto 2',price:100},
        {id:3,name:'Producto 3',price:440},
    ]
    const [products,setProduct] = useState([])
    const [cont,setCont] = useState(0)
    let x=10
    useEffect( ()=>{
        setCont(x)
        //jalar datos desde el api
        fetch('http://localhost:8000/api/products')
            .then((res)=> res.json())
            .then((data)=>{
                console.log(data);
                setProduct(data.data)
            })
    },[] )
    return (
    <View>
        <HeaderComponent/>
        <Text>{cont}</Text>
        <ScrollView style={{marginTop:60}}>
            {
                products.map((item,index)=>{
                    return (
                        <View key={"item_"+index}>
                            <ProductItemComponent item={item.product} key={"i_"+index} />
                        </View>
                    )
                })
            }
        </ScrollView>
        
    </View>
    )
}