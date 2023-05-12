import { NavigationContainer } from "@react-navigation/native";
import { createNativeStackNavigator } from "@react-navigation/native-stack";
import LoginComponent from "./views/auth/LoginComponent";
import TabsComponent from "./views/layouts/TabsComponent";
export default function App() {
  const Stack = createNativeStackNavigator()
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen component={LoginComponent} name="Login" options={{headerShown:false} }/>
        <Stack.Screen component={TabsComponent} name="Home" options={{headerShown:false,title:"Super Tienda"}}/>
      </Stack.Navigator>
    </NavigationContainer>
  );
}

