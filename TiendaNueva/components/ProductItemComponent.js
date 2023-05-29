import { useEffect, useState } from 'react'
import {StyleSheet,View, Text, TouchableWithoutFeedback, ImageBackground} from 'react-native'

export default function ProductItemComponent({item}){
     const [img, setImg] = useState("")
     useEffect(()=>{
            setImg("http://localhost:8000/img/products/"+item.img)
        
     },[])
    return(
        <TouchableWithoutFeedback onPress={()=>{} }
        style={styles.parent}>
            <View style={{padding:10, backgroundColor:'white',margin:10, borderRadius:20}}>
                
                <ImageBackground source={{uri: img}}
                resizeMode='cover'
                style={styles.image} imageStyle={{borderRadius:25}}/>
                <View>
                    <Text style={styles.title}>{item.name}</Text>
                    <Text style={styles.price}>{item.price}</Text>
                </View>
            </View>
            
        </TouchableWithoutFeedback>
    )
}
const styles = StyleSheet.create({
    parent:{
        backgroundColor:'white',
        padding:10,
        marginTop:10
    },
    image:{
        margin:20,
        height:320,
        justifyContent:"center",
        padding: 0,
        zIndex:1
    },
    title:{
        fontWeight:'bold',
        fontSize:18,
        marginLeft:20
    },
    price:{
        marginLeft:20
    }
})