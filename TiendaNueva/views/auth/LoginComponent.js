import { View,Text, Button } from "react-native"
export default function LoginComponent({navigation}){
    const login = ()=>{
        navigation.navigate('Home')
    }
    return (
    <View>
        <Text>Login</Text>
        <Button title="Ingresar" color="#555555" onPress={()=>{login()}}/>
    </View>
    )
}