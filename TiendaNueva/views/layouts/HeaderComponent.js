import { StyleSheet, Text, View, Image } from 'react-native'

export default function HeaderComponent(){

    return(
        <View style={styles.container}>
            <Image style={styles.logo} source={{uri:'https://uploads.turbologo.com/uploads/design/hq_preview_image/1847934/draw_svg20210507-22909-18ipq8j.svg.png'}}
            />
            <Image style={{width:50,height:50,borderRadius:25}} 
            source={{uri:'https://xsgames.co/randomusers/avatar.php?g=pixel'}}
            />
        </View>
    )
}
const styles = StyleSheet.create({
    container:{
        flexDirection:"row",
        backgroundColor:'white',
        justifyContent:'space-between',
        padding:10,
        margin:20,
        borderRadius:5,
        shadowColor:'#444444',
        shadowOpacity:0.1,
        shadowRadius:3,
    },
    logo:{
        width:50,
        height:50
    }
})