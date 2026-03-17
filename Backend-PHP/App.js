import React, { useEffect, useState } from "react";
import { Line } from "react-chartjs-2";
import "chart.js/auto";

export default function App() {
  const [dataPoints, setDataPoints] = useState({
    labels: [],
    voltage: [],
    current: [],
    temp: [],
    power: []
  });

  const [latest, setLatest] = useState({
    voltage: "--",
    current: "--",
    temp: "--",
    power: "--"
  });

  useEffect(() => {
    const interval = setInterval(() => {
      const time = new Date().toLocaleTimeString();

      const voltage = (Math.random() * 50 + 200).toFixed(2);
      const current = (Math.random() * 10).toFixed(2);
      const temp = (Math.random() * 45).toFixed(2);
      const power = (voltage * current).toFixed(2);

      setLatest({ voltage, current, temp, power });

      setDataPoints(prev => {
        const newLabels = [...prev.labels, time].slice(-10);

        return {
          labels: newLabels,
          voltage: [...prev.voltage, voltage].slice(-10),
          current: [...prev.current, current].slice(-10),
          temp: [...prev.temp, temp].slice(-10),
          power: [...prev.power, power].slice(-10)
        };
      });
    }, 2000);

    return () => clearInterval(interval);
  }, []);

  const createChart = (label, data, color) => ({
    labels: dataPoints.labels,
    datasets: [
      {
        label,
        data,
        borderColor: color,
        backgroundColor: color,
        tension: 0.4
      }
    ]
  });

  return (
    <div style={{ padding: 20, fontFamily: "Arial", background: "#f4f6f8" }}>
      <h1 style={{ textAlign: "center" }}>☀ Solar Dashboard (React)</h1>

      {/* CARDS */}
      <div style={{ display: "flex", flexWrap: "wrap", justifyContent: "center" }}>
        {Object.entries(latest).map(([key, value]) => (
          <div key={key} style={cardStyle}>
            {key.toUpperCase()}: {value}
          </div>
        ))}
      </div>

      {/* CHARTS */}
      <div style={gridStyle}>
        <ChartBox title="Voltage" data={createChart("Voltage", dataPoints.voltage, "blue")} />
        <ChartBox title="Current" data={createChart("Current", dataPoints.current, "green")} />
        <ChartBox title="Temperature" data={createChart("Temperature", dataPoints.temp, "red")} />
        <ChartBox title="Power" data={createChart("Power", dataPoints.power, "orange")} />
      </div>

      {/* ALERT */}
      {latest.temp > 35 && (
        <div style={{ color: "red", textAlign: "center", marginTop: 20 }}>
          ⚠ High Temperature Warning!
        </div>
      )}
    </div>
  );
}

// Chart Component
function ChartBox({ title, data }) {
  return (
    <div style={chartBox}>
      <h3>{title}</h3>
      <Line data={data} options={{ responsive: true, maintainAspectRatio: false }} />
    </div>
  );
}

// STYLES
const cardStyle = {
  background: "white",
  padding: "15px",
  margin: "10px",
  borderRadius: "10px",
  boxShadow: "0 0 10px rgba(0,0,0,0.1)",
  minWidth: "120px",
  textAlign: "center"
};

const gridStyle = {
  display: "grid",
  gridTemplateColumns: "repeat(auto-fit, minmax(300px, 1fr))",
  gap: "20px",
  marginTop: "20px"
};

const chartBox = {
  background: "white",
  padding: "15px",
  borderRadius: "10px",
  height: "300px",
  boxShadow: "0 0 10px rgba(0,0,0,0.1)"
};