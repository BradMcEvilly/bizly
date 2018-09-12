// App.js

import React, { Component } from 'react';
import {
  Platform,
  StyleSheet,
  Text,
  View
} from 'react-native';
import { StackNavigator } from 'react-navigation';
import Home from './src/screens/Home';
import BizlyEvent from './src/screens/BizlyEvent';

const AppNavigator = StackNavigator({
  HomeScreen: { screen: Home },
  BizlyEventScreen: { screen: BizlyEvent }
});

export default class App extends Component {
  render() {
    return (
      <AppNavigator />
    );
  }
}
