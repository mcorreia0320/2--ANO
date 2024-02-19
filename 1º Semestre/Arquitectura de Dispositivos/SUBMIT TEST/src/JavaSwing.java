import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class JavaSwing extends JFrame{
    private JPanel JPanelMain;
    private JButton submitButton;
    private JButton okButton;
    private JButton cancelButton;
    private JLabel okLabel;
    private JLabel submitLabel;
    private JLabel cancelLabel;

    public JavaSwing(String title) {
        super(title);
        this.setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);
        this.setContentPane(JPanelMain);
        this.pack();
        okButton.addActionListener(new ButtonClickListener());
        cancelButton.addActionListener(new ButtonClickListener());
        submitButton.addActionListener(new ButtonClickListener());
    }

    private class ButtonClickListener implements ActionListener{
        @Override
        public void actionPerformed(ActionEvent e) {
            String command = e.getActionCommand();
            if(command.equals("Ok")) {
                okLabel.setText("Ok Button clicked. ");
            } else if (command.equals("submitButton")) {
                submitLabel.setText("Submit Button clicked. ");
            } else {
                cancelLabel.setText("Cancel Button clicked. ");
            }
        }
    }

    public static void main(String[] args) {
        JFrame frame = new JavaSwing("Java Swing Example");
        frame.setVisible(true);
    }
}
