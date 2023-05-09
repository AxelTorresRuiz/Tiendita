import { View,Text, Button, StyleSheet, TextInput } from "react-native"
import {FontAwesome} from '@expo/vector-icons'
export default function LoginComponent({navigation}){
    const login = ()=>{
        navigation.navigate('Home')
    }
    return (
    <View style={styles.views}>
        <View style={{alignItems:'center'}}>
            <Text style={styles.titulo}>Tienda</Text>
            <Text style={styles.titulo}>Bienvenido de Vuelta</Text>
        </View>
        <view>
            <Text style={styles.label}>
                <FontAwesome name="user" size={15} color="#666" style={{marginRight:10}} />
                Usuario:
            </Text>
            <TextInput style={styles.input} placeholder="Ingrese su email" maxLength={40} />

            <Text style={styles.label}>
                <FontAwesome name="lock" size={15} color="#666" style={{marginRight:10}}/>
                Password:
                </Text>
            <TextInput style={styles.input} secureTextEntry={true} placeholder="Ingrese su Password" maxLength={40} />
        </view>

        <Button title="Ingresar" color="#555555" onPress={()=>{login()}}/>
    </View>
    )
}
const styles = StyleSheet.create({
    views:{
        padding:50,
        alignSelf:"center",
        flexDirection:'columns',
        top:100
    },
    titulo:{
        color:'#555',
        fontSize:20,
        marginTop:10,
        fontWeight:'bold',
        textAlignVertical:'center'
    },
    label:{
        color:'#555',
        fontSize:15,
        fontWeight:'300',
        marginTop:10
    },
    input:{
        width:300,
        height:50,
        backgroundColor:'white',
        borderRadius:5,
        borderColor:'#fcfcfc',
        padding:5,
        color:'#666666',
        marginTop:10
    }
})