// App.js
import * as React from 'react';
import { createStackNavigator } from 'react-navigation';
import { DefaultTheme, Provider as PaperProvider } from 'react-native-paper';
import { Appbar } from 'react-native-paper';
import BizlyNavList, { navItems } from 'src/components/BizlyNavList';

const routes = Object.keys(navItems)
    .map(id => ({ id, item: navItems[id] }))
    .reduce((acc, { id, item }) => {
        const Comp = item;
        const Screen = props => <Comp {...props} />;

        Screen.navigationOptions = props => ({
            header: (
                <Appbar.Header>
                <Appbar.BackAction onPress={() => props.navigation.goBack()} />
        <Appbar.Content title={(Comp: any).title} />
        </Appbar.Header>
    ),
        /* $FlowFixMe */
    ...(typeof Comp.navigationOptions === 'function'
            ? Comp.navigationOptions(props)
            : Comp.navigationOptions),
    });

        return {
            ...acc,
            [id]: { screen: Screen },
        };
    }, {});

export default createStackNavigator(
    {
        home: { screen: ExampleList },
        ...routes,
    },
    {
        navigationOptions: ({ navigation }) => ({
            header: (
                <Appbar.Header>
                <Appbar.Action icon="menu" onPress={() => navigation.openDrawer()} />
<Appbar.Content title="Examples" />
    </Appbar.Header>
),
}),
}
);
