import { NavigationContainer } from "@react-navigation/native";
import { createNativeStackNavigator } from "@react-navigation/native-stack";
import LoginComponent from "./views/auth/LoginComponent";
import HomeComponent from "./views/home/HomeComponent";
export default function App() {
  const Stack = createNativeStackNavigator()
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen component={LoginComponent} name="Login" options={{headerShown:false} }/>
        <Stack.Screen component={HomeComponent} name="Home" options={{title:"Super Tienda"}}/>
      </Stack.Navigator>
    </NavigationContainer>
  );
}

