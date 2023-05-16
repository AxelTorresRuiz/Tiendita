import { StyleSheet, Text, View, Image } from 'react-native'

export default function HeaderComponent(){

    return(
        <View style={styles.container}>
            <Image style={styles.logo} source={{uri:'source.boringavatars.com/bauhaus/120/Stefan?colors=264653,2a9d8f,e9c46a'}}
            />
            <Image style={{width:50,height:50,borderRadius:25}} source={{uri:'https://xsgames.co/randomusers/avatar.php?g=pixel'}}
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