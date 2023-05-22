import {StyleSheet,View, Text, TouchableWithoutFeedback, ImageBackground} from 'react-native'

export default function ProductItemComponent(){
    return(
        <TouchableWithoutFeedback onPress={()=>{} }>
            <View>
                <ImageBackground source={{uri: "https://m.media-amazon.com/images/I/81mSq3tWczL.jpg"}}
                resizeMode='cover'
                style={styles.image} imageStyle={{borderRadius:25}}/>
                <View>
                    <Text>Nombre Tal</Text>
                    <Text>$500.00</Text>
                </View>
            </View>
            
        </TouchableWithoutFeedback>
    )
}
const styles = StyleSheet.create({
    image:{
        matgin:20,
        height:320,
        justifyContent:"center",
        padding: 0,
        zIndex:1
    },
})