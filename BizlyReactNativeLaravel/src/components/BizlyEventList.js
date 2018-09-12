// BizlyEventList.js

import React, { Component } from 'react';
import {  View, Text, StyleSheet} from 'react-native';
import PropTypes from 'prop-types';

export default class BizlyEventList extends Component {

  static propTypes = {
      bizly_events: PropTypes.array.isRequired
  }; 
  render() {
    return (
      <View style={styles.eventsList}>
        {this.props.bizly_events.map((bizly_events) => {
            return (
                <View key={bizly_event.id}>
                    <Text style={styles.eventtext}>{bizly_event.name} | { bizly_event.name }</Text>
                </View>
            )
        })}
      </View>
    );
  }
}

const styles = StyleSheet.create({
    eventsList: {
        flex: 1,
        flexDirection: 'column',
        justifyContent: 'space-around',
    },
    eventtext: {
        fontSize: 24,
        fontWeight: 'bold',
        textAlign: 'center',
    }
});
